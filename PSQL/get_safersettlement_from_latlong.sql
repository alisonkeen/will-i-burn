select name from safersettlement where st_within(ST_GeomFromEWKT('SRID=4326; POINT( 138.561423 -34.863695)'), geom);