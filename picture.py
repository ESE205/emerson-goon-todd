from picamera import PiCamera
import datetime
from time import sleep

camera = PiCamera()
camera.resolution = (1024,1024)
sleep(1)

i = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")
camera.capture('emerson-goon-todd/piImages/%s.jpg' % i)
