import pytest
from selenium import webdriver
from selenium.webdriver.chrome.options import Options

@pytest.fixture
def driver():
    options = Options()
    options.add_argument("--headless")
    options.add_argument("--ignore-certificate-errors")
    options.add_argument("--allow-insecure-localhost")

    driver = webdriver.Remote(
        command_executor='http://selenium-hub:4444/wd/hub',
        options=options
    )

    yield driver
    driver.quit()
