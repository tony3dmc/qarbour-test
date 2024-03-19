import pytest
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

class TestFrontend:
    @pytest.fixture(autouse=True)
    def setup(self, driver):
        self.driver = driver
        self.driver.get("http://web/")
        self.title = self.driver.title

    def test_title(self):
        assert "Aperture Science Cake Division" in self.title

    def test_vacancy(self):
        vacancies = self.driver.find_elements(By.CSS_SELECTOR, "div.vacancy")
        assert len(vacancies) >= 3
