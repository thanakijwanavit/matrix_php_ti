count=1
count=$((count+1))
cd patterns/
for entry in *
do
    case $entry in *.bmp) 
    count=$((count+1));;
    esac    
done
dlp_nirscan -l$count
cd ..

