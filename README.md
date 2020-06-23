# CovidGoWhere
An app to help me track if I have been near a Covid-19 cluster within Singapore based on the list of locations provided by MOH and my phones GPS data. Purpose of this app is to provide the public with more awareness of their risk exposure to known clusters. The app also protects privacy of the user by first not collecting any personal identifier or device identifier, and secondly not uploading any data (including meta-data typically used for ad placements)

# Goals of the app
1. Store device location & time data locally.
2. No personal idenfier such as phone #, name, email or NRIC is stored in the app
3. Scrape and parse location from here: https://www.gov.sg/article/covid-19-public-places-visited-by-cases-in-the-community-during-infectious-period to compare with locations that I've been.
4. Flash green if all is good.
5. Flash red if not looking good.

# Task
1. Setup REGEX to parse street addresses from here: https://www.gov.sg/article/covid-19-public-places-visited-by-cases-in-the-community-during-infectious-period and radius from server. Radius will vary because of building sizes, and preferably we want to cover the entire building area since air conditioning is central in a building.  
2. Track location based on this: https://code.google.com/archive/p/open-gpstracker/source/code/source
3. Compare intersection of venn diagram radius with personal radius of 250m.
