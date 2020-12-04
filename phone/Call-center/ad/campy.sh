#!/bin/bash

campaign=$1
retry=$2
pause=$3
timeout=$4
concurrent=$5
limit=$6
dest=$7
chcon=$8
extcon=$9
#queue="asterisk queue name"


export LANG=C.UTF-8

d=$campaign
s=$(date +%d-$m%y_%H:%M:%S)
rm -f  "$campaign"
echo "$d"

user="YOUR_USER"
pass="YOUR_PASSWORD"
db="autodialer"
sqlread="select concat(number,',',camp) from autodialer.$campaign where status in ('NOANS', 'BUSY', 'NOANSWER', 'CONGESTION') order by RAND() limit $limit"
RES=`mysql -h127.0.0.1 -u $user -p$pass --skip-column-names --default-character-set=utf8 $db -e "$sqlread"`

printf "$RES" >> $d
echo "" >> $d

while IFS="," read number camp name; do


cat <<EOF  >  /var/spool/asterisk/tmp/$camp-$number

Channel: Local/$number@$chcon/n
Callerid: "$number" <$number>
MaxRetries: $retry
RetryTime: $pause
WaitTime: $timeout
Context: $extcon
Extension: $dest
Priority: 1
Setvar: campaign=$camp
Setvar: dnumber=$number
Archive: no

EOF

    chown asterisk:asterisk /var/spool/asterisk/tmp/$camp-$number
    mv /var/spool/asterisk/tmp/$camp-$number  /var/spool/asterisk/outgoing

    echo "$number"

    number=`expr $number + 1`

    while [ "$?" -eq "0" ]

    do

count_files ()

{

#queueshow="queue show $queue"

#count_incall=`asterisk -rx "$queueshow" | grep -c "in call" | awk -v OFS=, '{print $1}' | tr -d '\n'`

#count_free=`asterisk -rx "$queueshow" | grep -v "paused" | grep -c "Not in use" | awk -v OFS=, '{print $1}' | tr -d '\n'`


#call_power=$((($count_incall + $count_free * $coef )))

    count_f=`ls /var/spool/asterisk/outgoing | grep "$camp" | wc -l | tr -d '\n'`

        if [ "$count_f" -ge  "$concurrent" ]; then

            return 0

            sleep 5

        else

            return 1

        fi

}

    count_files

    done

done < $d
