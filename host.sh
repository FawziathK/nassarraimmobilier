#!/bin/bash 

echo "Le dossier : public_html/ est démarer ..." 


php -S localhost:8008 -t public_html/ -d error_reporting=E_ALL


