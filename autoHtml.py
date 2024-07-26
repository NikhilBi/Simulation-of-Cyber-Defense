import webbrowser
import time
from selenium import webdriver

driver = webdriver.Edge()

# 1st method how to open htmlfiles in chrome using
#filename = 'localhost/webCodes/sql_injection.html'
#webbrowser.open_new_tab(filename)

driver.get("localhost/webCodes/sql_injection.html")
time.sleep(10)

driver.find_element_by_xpath("//button[contains(text(),'Login')]").click()
