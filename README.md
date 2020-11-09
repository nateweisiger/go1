# Run the app

### Clone GitHub repo 
`git@github.com:nateweisiger/go1.git`

### Install Dependencies
`composer update`

### Start Elastic Search
`cd /path/to/elasticsearch-7.9.3/bin`

`./elasticsearch`

### Start php web server
`cd public/`

`php -S localhost:8888`

### Load seed data
`http://localhost:8888/load_data`

### The UI can be found here
`http://localhost:8888/`

### The API end points can be found here
`http://localhost:8888/api/events`

`http://localhost:8888/api/events/{event_id}`


# The Task

GO1 Tech Test
Build a slim application to retrieve, filter and display training events based on an input location, keyword(s) and a date.

Requirements
Using the supplied data dump, provide an API or interface that serves events and their metadata.



The API should:

·        By default, return the events supplied in the data dump

·        Accept keyword string query parameters for title and description

·        Accept a location input to filter to nearest events

·        Accept a date input to filter events

The interface should:

·        Display the events in a list view and have appropriated interface for the back-end functions

·        The event should show relevant summary information

·        Clicking on the event should open a new interface with the event's full information

·        Support Chrome >= 70 , Firefox >= 68, Safari >= 11, Internet Explorer >= 11

You should include some test coverage for this application.

Commit your work to a repository regularly (and make it public or send us the .git directory).

Record how long you work on this application (be honest, accurate task estimation is important at GO1).

Preferably, this application should be built in a modern javascript platform (GO1 relies on React/Typescript/Node). If you feel you can better represent yourself with a different stack, please do so.

Extra Credits
·        Include a map library to display location/events.

·        Build front end using React and Typescript.

·        Package your application in a Docker container.

·        Achieve >80% test coverage.

·        Impress us by adding something amazing that's not documented above.