# CovidGoWhere
An app to help me track if I have been near a Covid-19 cluster within Singapore based on the list of locations provided by MOH and my phones GPS data.

# Goals of the app
1. Store device location & time data locally.
2. No personal idenfier such as phone #, name, email or NRIC is stored in the app
3. Scrape and parse location from here: https://www.gov.sg/article/covid-19-public-places-visited-by-cases-in-the-community-during-infectious-period to compare with locations that I've been.
4. Flash green if all is good.
5. Flash red if not looking good.

# Task
1. Setup REGEX to parse street addresses from here: https://www.gov.sg/article/covid-19-public-places-visited-by-cases-in-the-community-during-infectious-period
2. Track location based on this: https://code.google.com/archive/p/open-gpstracker/source/code/source
3. Compare within set radius of 250m.
