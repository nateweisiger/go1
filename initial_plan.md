#Use:
- Slim PHP Framework (Required as per instructions)
- Composer package manager
- MySQL (If geo searching, postgres) or elastic search - Decide after looking at data.
- Bootstrap / Jquery for UI

#Tasks:
- Set up Slim app with any needed dependencies
- Write data import script
- Write API GET endpoint (all)
  - Filters by:
    - keyword (filters on title or description)
    - location (geos search needed? or string match? Decide after looking at data)
    - date
- Write API get endpoint by ID
- Add tests
- Set up basic UI with Bootstrap
  - Query api and display list of events with summary data
  - 3 search boxes - Keyword, location and date
  - Add details modal for each event

##If time remains:
- Add map UI for events
- Package into Docker
- Possibly add simple API authentication?