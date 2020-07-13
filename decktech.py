import os
from bs4 import BeautifulSoup
import re
import pandas as pd

os.chdir('d:\\Desktop\\decktech_archives\\decktech\\swccg\\decks\\light')
# get a list of the files in the current directory
here = os.listdir(os.getcwd())

def preproc(infile):

    try:
    # open the infile for reading
        file = open(infile, 'r')
        fileName = os.path.splitext(infile)[0]

        # convert the contents of the infile to a Beautiful Soup object
        soup = BeautifulSoup(file, 'html.parser')

        # Find deck title
        decktitle = soup.find('font', {'face':'Haettenschweiler, Tahoma, Arial'}).get_text()

        # Find author
        authorElement = soup.find('td', text="Author")
        print(authorElement)
        for i in authorElement.parent.select("td:nth-of-type(2)"):
            author = i.text

        #Find date created
        dateElement = soup.find('td', text="Date Created")
        for i in dateElement.parent.select("td:nth-of-type(2)"):
            date = i.text

        #Find description
        descriptionElement = soup.find('td', text="Description")
        for i in descriptionElement.parent.select("td:nth-of-type(2)"):
            description = i.text

        #Find rating
        ratingElement = soup.find('td', text="Rating")
        rating = ratingElement.parent.find('img')['src']
        rating = re.sub("../images/dd", "", str(rating))
        rating = re.sub("\.GIF", "", rating)
        rating = float(int(rating))/2

        # Find cards
        cardsElement = soup.find('td', text="Cards")
        for i in cardsElement.parent.select("td:nth-of-type(2)"):
            cards = i.find('font').text

        # Find strategy
        strategyElement = soup.find('td', text="Strategy")
        for i in strategyElement.parent.select("td:nth-of-type(2)"):
            strategy = i.find('font').text


        with open(pd.to_datetime(date).strftime("%Y-%m-%d")+ '-' + fileName + '.md', 'a') as output:
            output.write( '---' + '\n')
            output.write('author: ' + author.encode("utf8") + '\n')
            output.write('title: ' + decktitle.encode("utf8") + '\n')
            output.write('side: ' + 'Light' + '\n')
            output.write('date: ' + pd.to_datetime(date).strftime("%Y-%m-%d") + '\n')
            output.write('description: ' + description.encode("utf8") + '\n')
            output.write('rating: ' + str(rating) + '\n')
            output.write('---' + '\n' + 'Cards: ' + '\n' + '\n' + cards.encode("utf8") + '\n' + '\n' + 'Strategy: '+ '\n' + '\n' + strategy.encode("utf8"))

    except:
        print "error"


fileName = 0
for i in here:
    preproc(i)