picEmpty = double(imread('empty.jpg'));
pic1PersonClose = double(imread('1personclose.jpg'));
pic1PersonFar = double(imread('1personfar.jpg'));
pic2Person = double(imread('2personpic.jpg'));



%{
figure;
image(picEmpty);
figure;
image(pic1PersonClose);
figure;
image(pic1PersonFar);
figure;
image(pic2Person);
%}

grayPicEmpty = rgb2gray(picEmpty);
grayPic1PersonClose = rgb2gray(pic1PersonClose);
grayPic1PersonFar = rgb2gray(pic1PersonFar);
grayPic2Person = rgb2gray(pic2Person);

figure;
imshow(grayPicEmpty);
figure;
imshow(grayPic1PersonClose);
figure;
imshow(grayPic1PersonFar);
figure;
imshow(grayPic2Person);

timeDifference1 = grayPicEmpty - grayPicEmpty;
figure;
imshow(timeDifference1);

timeDifference2 = grayPicEmpty - grayPic1PersonClose;
figure;
imshow(timeDifference2);

timeDifference3 = grayPic1PersonClose - grayPic1PersonFar;
figure;
imshow(timeDifference3);

timeDifference4 = grayPic1PersonFar - grayPic2Person;
figure;
imshow(timeDifference4);
