#!/bin/bash
java tdb.tdbloader --desc=/usr/lib/fuseki/tdb.stats.ttl --graph=http://stats.270a.info/graph/meta vocab.ttl
java tdb.tdbloader --desc=/usr/lib/fuseki/tdb.stats.ttl --graph=http://stats.270a.info/graph/meta ~/Graphs/prov-o.nt
java tdb.tdbloader --desc=/usr/lib/fuseki/tdb.stats.ttl --graph=http://stats.270a.info/graph/meta ~/Graphs/dcterms.nt
java tdb.tdbloader --desc=/usr/lib/fuseki/tdb.stats.ttl --graph=http://stats.270a.info/graph/meta ~/Graphs/rdfs.nt
java tdb.tdbloader --desc=/usr/lib/fuseki/tdb.stats.ttl --graph=http://stats.270a.info/graph/meta ~/Graphs/rdf.nt
