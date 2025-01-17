#!/bin/bash

php bin/magento set:up

wait


php bin/magento s:d:c

wait

php bin/magento setup:static-content:deploy -f 
wait

#php bin/magento indexer:reindex

wait

php bin/magento c:f

chmod -R 777 var/ generated/code/ pub/static

echo -e "FINISHED"

