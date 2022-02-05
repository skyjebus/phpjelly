#!/bin/bash

# Rename jpeg to jpg
#for x in `du -a | cut -d '/' -f2- | grep jpeg`; do mv "$x" "${x%.jpeg}.jpg"; done

# converting JPEG images
find ./ -type f -and \( -iname "*.jpg" -o -iname "*.jpeg" \) \
-exec bash -c '
webp_path=$(sed 's/\.[^.]*$/.webp/' <<< "$0");
if [ ! -f "$webp_path" ]; then 
    #JPG
    convert *.jpg -quality 90 -set filename:f '%t-og' '../%[filename:f].jpg';
    convert *.jpg -resize 300 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    convert *.jpg -resize 320 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    convert *.jpg -resize 640 -quality 90 -set filename:f '%t-320-2x' '../%[filename:f].jpg';
    convert *.jpg -resize 375 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    convert *.jpg -resize 750 -quality 90 -set filename:f '%t-375-2x' '../%[filename:f].jpg';
    convert *.jpg -resize 480 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    convert *.jpg -resize 960 -quality 90 -set filename:f '%t-480-2x' '../%[filename:f].jpg';
    convert *.jpg -resize 768 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    convert *.jpg -resize 1536 -quality 90 -set filename:f '%t-768-2x' '../%[filename:f].jpg';
    convert *.jpg -resize 1024 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    convert *.jpg -resize 2048 -quality 90 -set filename:f '%t-1024-2x' '../%[filename:f].jpg';
    convert *.jpg -resize 1400 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    convert *.jpg -resize 2800 -quality 90 -set filename:f '%t-1400-2x' '../%[filename:f].jpg';
    convert *.jpg -resize 2000 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    convert *.jpg -resize 3000 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';
    #WEBP
    convert *.jpg -quality 90 -define webp:lossless=true -set filename:f '%t-og' '../%[filename:f].webp';
    convert *.jpg -resize 300 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.jpg -resize 320 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.jpg -resize 640 -quality 90 -define webp:lossless=true -set filename:f '%t-320-2x' '../%[filename:f].webp';
    convert *.jpg -resize 375 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.jpg -resize 750 -quality 90 -define webp:lossless=true -set filename:f '%t-375-2x' '../%[filename:f].webp';
    convert *.jpg -resize 480 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.jpg -resize 960 -quality 90 -define webp:lossless=true -set filename:f '%t-480-2x' '../%[filename:f].webp';
    convert *.jpg -resize 768 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.jpg -resize 1536 -quality 90 -define webp:lossless=true -set filename:f '%t-768-2x' '../%[filename:f].webp';
    convert *.jpg -resize 1024 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.jpg -resize 2048 -quality 90 -define webp:lossless=true -set filename:f '%t-1024-2x' '../%[filename:f].webp';
    convert *.jpg -resize 1400 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.jpg -resize 2800 -quality 90 -define webp:lossless=true -set filename:f '%t-1400-2x' '../%[filename:f].webp';
    convert *.jpg -resize 2000 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.jpg -resize 3000 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
fi;' {} \;

# converting PNG images
find ./ -type f -and -iname "*.png" \
-exec bash -c '
webp_path=$(sed 's/\.[^.]*$/.webp/' <<< "$0");
if [ ! -f "$webp_path" ]; then 
    #PNG
    convert *.png -quality 90 -set filename:f '%t-og' '../%[filename:f].png';
    convert *.png -resize 300 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    convert *.png -resize 320 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    convert *.png -resize 640 -quality 90 -set filename:f '%t-320-2x' '../%[filename:f].png';
    convert *.png -resize 375 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    convert *.png -resize 750 -quality 90 -set filename:f '%t-375-2x' '../%[filename:f].png';
    convert *.png -resize 480 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    convert *.png -resize 960 -quality 90 -set filename:f '%t-480-2x' '../%[filename:f].png';
    convert *.png -resize 768 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    convert *.png -resize 1536 -quality 90 -set filename:f '%t-768-2x' '../%[filename:f].png';
    convert *.png -resize 1024 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    convert *.png -resize 2048 -quality 90 -set filename:f '%t-1024-2x' '../%[filename:f].png';
    convert *.png -resize 1400 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    convert *.png -resize 2800 -quality 90 -set filename:f '%t-1400-2x' '../%[filename:f].png';
    convert *.png -resize 2000 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    convert *.png -resize 3000 -quality 90 -set filename:f '%t-%w' '../%[filename:f].png';
    #WEBP
    convert *.png -quality 90 -define webp:lossless=true -set filename:f '%t-og' '../%[filename:f].webp';
    convert *.png -resize 300 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.png -resize 320 -quality 90 -define --exclude='*.sh.*'suwebp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.png -resize 640 -quality 90 -define webp:lossless=true -set filename:f '%t-320-2x' '../%[filename:f].webp';
    convert *.png -resize 375 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.png -resize 750 -quality 90 -define webp:lossless=true -set filename:f '%t-375-2x' '../%[filename:f].webp';
    convert *.png -resize 480 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.png -resize 960 -quality 90 -define webp:lossless=true -set filename:f '%t-480-2x' '../%[filename:f].webp';
    convert *.png -resize 768 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.png -resize 1536 -quality 90 -define webp:lossless=true -set filename:f '%t-768-2x' '../%[filename:f].webp';
    convert *.png -resize 1024 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.png -resize 2048 -quality 90 -define webp:lossless=true -set filename:f '%t-1024-2x' '../%[filename:f].webp';
    convert *.png -resize 1400 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.png -resize 2800 -quality 90 -define webp:lossless=true -set filename:f '%t-1400-2x' '../%[filename:f].webp';
    convert *.png -resize 2000 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
    convert *.png -resize 3000 -quality 90 -define webp:lossless=true -set filename:f '%t-%w' '../%[filename:f].webp';
fi;' {} \;


#convert mogrify -format jpeg -sampling-factor 4:2:0 -strip -quality 90 -interlace JPEG -colorspace sRGB .jpeg .jpg

#convert *.jpg -resize 250 -quality 90 -set filename:f '%t_%wx%h' '%[filename:f].jpg'
#convert mogrify -format jpeg -resize 250 -quality 90 -set filename:f '%t_%w' '%[filename:f].jpg'
#convert *.jpg -resize 250 -quality 90 -set filename:f '%t-%w' '../%[filename:f].jpg';