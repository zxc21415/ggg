import requests

def search_map(x1,x2):
    
    #url = "https://www.google.com.tw/maps/place/1.2492,3.5797"
    url = "https://www.google.com.tw/maps/place/{},{}".format(x1,x2)
    res = requests.get(url)
    a=res.text.split("<meta content=")
    #print(a[14])
    b=a[14].split('"')
    #print(b[1])
    location=b
    return location