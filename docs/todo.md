Fix MySQL authentication / connection security  because i set allowPublicKeyRetrieval=true locally

cleanup job that deletes TSM snapshots older than 7 days

create index on tsm_item_data (item_id, recorded_at)
