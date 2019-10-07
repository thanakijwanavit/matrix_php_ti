#!/bin/bash
ip_str=`ifconfig | grep "inet addr"`
ip_idx=`expr index "$ip_str" :`
ip_idx=`expr $ip_idx + 1`
ip_str=`expr substr "$ip_str" "$ip_idx" 15`
echo $ip_str
