import RPi.GPIO as GPIO
from time import sleep

GPIO.setwarnings(False)
GPIO.setmode(GPIO.Board)
GPIO.setup(8, GPIO.OUT, initial=GPIO.LOW)
GPIO.setup(10, GPIO.IN, pull_up_down=GPIO.PUD_UP)

while True:
  button_press = GPIO.input(10)
  if button_press == False:
    GPIO.output(8, GPIO.HIGH)
    sleep(1)
    GPIO.input(8, GPIO.LOW)
    sleep(1)


