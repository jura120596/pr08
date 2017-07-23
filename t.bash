#!/bin/bash
name=$1
declare name=$name"pr2017"
declare cname=$name"pr2017.azurewebsites.net"
declare mhostname="$name.pr08.itiscloud.ru"
az account show 1> /dev/null
echo $name
if [ $? != 0 ];
then
az login
fi
az account set --subscription "89da4d0c-7daa-4d45-b9cc-ab6987be1e41"
az webapp create -g pr2017 -p ServicePlane0ceef23-bd0a -n $name --runtime "PHP|7.0" --deployment-source-url https://github.com/jura120596/phpinfo
az network dns record-set cname set-record -n $name -c $cname --resource-group pr2017 --zone-name pr08.itiscloud.ru
az webapp config hostname add --hostname $mhostname -g pr2017 --webapp-name $name