from picamera import PiCamera
from time import sleep

camera = PiCamera()
camera.resolution = (1024,1024)

camera.start_preview()
sleep(5)

num_pics = 2

for i in range(num_pics):
  sleep(5)
  camera.capture('images/image%s.jpg' % i)

camera.stop_preview()
