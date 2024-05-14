from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

class Utils:
    def __init__(self, driver):
        self.driver = driver

    def wait_for_it(self, element):
        WebDriverWait(self.driver, 10).until(
            EC.presence_of_element_located((By.CSS_SELECTOR, element))
        )

    def click_link(self, text):
        self.driver.find_element(By.LINK_TEXT, text).click()

    def find_element(self, element):
        return self.driver.find_element(By.CSS_SELECTOR, element)
