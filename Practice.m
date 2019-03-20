emptyPic = (importdata('noCaroline2.JPG'));
personPic1 = (importdata('Caroline.JPG'));
personPic2 = (importdata('Caroline2.JPG'));
% figure;
% imshow(emptyPic);
% figure;
% imshow(personPic1);
% figure;
% imshow(personPic2);
figure;
imshow(emptyPic);

grayEmptyPic = rgb2gray(emptyPic);
grayPersonPic1 = rgb2gray(personPic1);
grayPersonPic2 = rgb2gray(personPic2);
% figure;
% imshow(grayEmptyPic);
% figure;
% imshow(grayPersonPic1);
% figure;
% imshow(grayPersonPic2);

% difference1 should be high - compares empty and pic with person
difference1= grayPersonPic1-grayEmptyPic;
figure;
imshow(difference1);
% difference2 should be high - compares empty and pic with person
difference2= grayEmptyPic - grayPersonPic2;
figure;
imshow(difference2);
%difference3 should be low - compares 2 pics with people
difference3= grayPersonPic1 - grayPersonPic2;
figure;
imshow(difference3);

firstTimes = double(ones([4032,1]));
secondTimes = double(ones([1,3024]));

difference1Matrix1 = mtimes(difference1,firstTimes);
number1 = secondTimes * difference1Matrix1;

difference2Matrix1 = mtimes(difference2,firstTimes);
number2 = secondTimes * difference2Matrix1;

difference3Matrix1 = mtimes(difference3,firstTimes);
number3 = secondTimes * difference3Matrix1;
