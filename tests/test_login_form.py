import pytest
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

class TestLoginForm:
    @pytest.fixture(autouse=True)
    def setup(self, driver):
        self.driver = driver
        self.driver.get("http://web/login")
        self.username = self.driver.find_element(By.NAME, "email")
        self.password = self.driver.find_element(By.NAME, "password")

    def test_login_success(self):
        self.username.send_keys("glados@example.com")
        self.password.send_keys("password")
        self.password.send_keys(Keys.RETURN)

        success_message_locator = (By.CSS_SELECTOR, "div.alert")
        WebDriverWait(self.driver, 10).until(EC.text_to_be_present_in_element(success_message_locator, "Login successful"))
        assert "Login successful" in self.driver.page_source

    def test_login_failure(self):
        self.username.send_keys("glados@example.com")
        self.password.send_keys("wrongpassword")
        self.password.send_keys(Keys.RETURN)

        error_message_locator = (By.CSS_SELECTOR, "div.alert")
        WebDriverWait(self.driver, 10).until(EC.text_to_be_present_in_element(error_message_locator, "Invalid credentials"))
        assert "Invalid credentials" in self.driver.page_source

    def test_blank_both(self):
        self.password.send_keys(Keys.RETURN)
        is_valid = self.driver.execute_script("return document.getElementById('loginForm').checkValidity();")
        assert not is_valid
    
    def test_blank_username(self):
        self.password.send_keys("password")
        self.password.send_keys(Keys.RETURN)
        is_valid = self.driver.execute_script("return document.getElementById('loginForm').checkValidity();")
        assert not is_valid

    def test_blank_password(self):
        self.username.send_keys("test@example.com")
        self.password.send_keys(Keys.RETURN)
        is_valid = self.driver.execute_script("return document.getElementById('loginForm').checkValidity();")
        assert not is_valid
