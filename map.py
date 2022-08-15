import requests
from bs4 import BeautifulSoup
import re

def search_map(x1,x2):
    
    #url = "https://www.google.com.tw/maps/place/1.2492,3.5797"
    url = "https://www.google.com.tw/maps/place/{},{}".format(x1,x2)
    res = requests.get(url)
    Soup = BeautifulSoup(res.text,'html.parser')
    a=Soup.find_all('meta')
    b=a[7]["content"]
    print(b.replace((".*E"),""))
    c=re.sub(r'^.*·',"",b)
    print(c.strip())
    d=c.strip()
    location=d
    return location