#!/bin/bash

# Rename jpeg to jpg
#for x in `du -a | cut -d '/' -f2- | grep jpeg`; do mv "$x" "${x%.jpeg}.jpg"; done

# magicking JPEG images
find ./ -type f -and \( -iname "*.jpg" -o -iname "*.jpeg" \) \
-exec bash -c '
webp_path=$(sed 's/\.[^.]*$/.webp/' <<< "$0");
if [ ! -f "$webp_path" ]; then 
    #JPG
    magick *.jpg -quality 90 -set filename:f '%t-og' '../%[filename:f].jpg';
    magick *.jpg -resize 320 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    magick *.jpg -resize 375 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    magick *.jpg -resize 480 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    magick *.jpg -resize 768 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    magick *.jpg -resize 1024 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    magick *.jpg -resize 1400 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    magick *.jpg -resize 4000 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    #WEBP
    magick *.jpg -quality 90 -define webp:lossless=true -set filename:f '%t-og' '../%[filename:f].webp';
    magick *.jpg -resize 320 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.jpg -resize 375 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.jpg -resize 480 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.jpg -resize 768 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.jpg -resize 1024 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.jpg -resize 1400 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.jpg -resize 4000 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
fi;' {} \;

# magicking PNG images
find ./ -type f -and -iname "*.png" \
-exec bash -c '
webp_path=$(sed 's/\.[^.]*$/.webp/' <<< "$0");
if [ ! -f "$webp_path" ]; then 
    #PNG
    magick *.png -quality 90 -set filename:f '%t-og' '../%[filename:f].png';
    magick *.png -resize 320 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    magick *.png -resize 375 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    magick *.png -resize 480 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    magick *.png -resize 768 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    magick *.png -resize 1024 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    magick *.png -resize 1400 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    magick *.png -resize 4000 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    #WEBP
    magick *.png -quality 90 -define webp:lossless=true -set filename:f '%t-og' '../%[filename:f].webp';
    magick *.png -resize 320 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.png -resize 375 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.png -resize 480 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.png -resize 768 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.png -resize 1024 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.png -resize 1400 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    magick *.png -resize 4000 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
fi;' {} \;