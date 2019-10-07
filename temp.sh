count=1
count=$((count+1))
for entry in *
do
    case $entry in *.bmp) 
    convert $entry -virtual-pixel black -interpolate NearestNeighbor -distort polynomial "2 $(cat control_points.txt)" scan_img.bmp
    mv scan_img.bmp $entry
    count=$((count+1));;
    esac    
done
dlp_nirscan -l$count
