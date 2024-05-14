import pytest
from selenium.webdriver.common.by import By
from utils import Utils

class TestFrontend:
    @pytest.fixture(autouse=True)
    def setup(self, driver):
        self.driver = driver
        self.driver.get("http://web/")
        self.title = self.driver.title
        self.utils = Utils(self.driver)

    def test_title(self):
        assert "Aperture Science Cake Division" in self.title

    def test_vacancy(self):
        vacancies = self.driver.find_elements(By.CSS_SELECTOR, "div.vacancy")
        assert len(vacancies) >= 3

    def test_click_vacancy(self):
        self.utils.click_link("Portal Cake Designer")
        self.utils.wait_for_it("button.apply")
        assert "out of this world" in self.driver.page_source
