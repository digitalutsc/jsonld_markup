# JSON_LD Markup #
Injects a schema.org compliant JSON-LD into the site HMTL which search enngines like Google can detect for SEO 

## Setup and Usage ##
### Requirements ###
- JSON-LD REST Services module

### Installation ###
Download module using Composer, and enable with Drush.

### Configuration ###
1. Add a new text field to the content type you wish to expose to SEO
2. When editing content set the value of the newly created field to the name of schema.org scheam type (Book, ImageObject, Article, etc)
3. Navigate to Configuartion JSON-LD Markup
4. In the "Schema Field" text field enter the a machine name of your created field

A JOSN-LD with you specifed type should now appear in a script tag in the head of the content's page.

EX:
<script type="application/ld+json">
    {
        "@graph":[{
                    "@id":"https:\/\/islandora.traefik.me\/node\/1",
                    "@type":["http:\/\/schema.org\/Book"],
                    "http:\/\/schema.org\/author":[{"@id":"https:\/\/islandora.traefik.me\/user\/1"}],
                    "dcterms:title":[{"@value":"TEST","@language":"en"}],
                    "http:\/\/schema.org\/dateCreated":[{
                                                        "@value":"2023-10-03T14:24:37+00:00",
                                                        "@type":"http:\/\/www.w3.org\/2001\/XMLSchema#dateTime"
                                                        }],
                     "http:\/\/schema.org\/dateModified":[{
                                                            "@value":"2023-10-05T15:34:41+00:00",
                                                            "@type":"http:\/\/www.w3.org\/2001\/XMLSchema#dateTime"
                                                         }],
                     "dcterms:alternative":[{"@value":"TEST","@language":"en"}],
                     "dcterms:extent":[{"@value":"1 item"}]},
                     {
                        "@id":"https:\/\/islandora.traefik.me\/user\/1",
                        "@type":["http:\/\/schema.org\/Person"]
                    }
    ]}
</script>