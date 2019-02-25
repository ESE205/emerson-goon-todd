from picamera import PiCamera
from time import sleep
import numpy as np
import cv2 as cv

camera = PiCamera()
camera.resolution = (1024,1024)
camera.iso = 400
sleep(2)
camera.shutter_speed = camera.exposure_speed
sleep(2)
camera.exposure_mode = 'off'
camera.awb_mode = 'off'
camera.awb_gains = (1.2, 1.5)

cap1 = camera.capture('images/img1.jpg')
sleep(5)
cap2 = camera.capture('images/img2.jpg')
sleep(1)

img1 = cv.imread('images/img1.jpg')
img2 = cv.imread('images/img2.jpg')

gray1 = cv.cvtColor(img1, cv.COLOR_BGR2GRAY)
gray2 = cv.cvtColor(img2, cv.COLOR_BGR2GRAY)

diff = cv.absdiff(gray1, gray2)
thresh = 20
diff[diff < thresh] = 0
diff[diff >= thresh] = 200
numDiffPix = np.sum(diff)/200

print(numDiffPix)
