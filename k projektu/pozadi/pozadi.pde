color cervena = color(141, 0, 16, 128);
color modra = color(25, 65, 102, 128);
color pozadi = color(178);
long last;
int dobaVymazani = 30000;

void setup() {
  size(1920, 1200, JAVA2D);
  frameRate(2);
  background(pozadi);
  noStroke();
  smooth(8);
}

void draw() {
  if (millis() >= last+dobaVymazani) {
    clear();
    background(pozadi);
    last = millis();
  }
  if ((millis() % 2) == 0) {
    fill(modra);
    ellipse(random(0,width), random(0,height), 200, 200);
    byte fr = byte(random(1,5));
    switch (fr) {
      case 1:
        frameRate(2);
        break;
      case 2:
        frameRate(3);
        break;
      case 3:
        frameRate(4);
        break;
      case 4:
        frameRate(8);
        break;
      case 5:
        frameRate(10);
        break;
      default:
        break;
    }
  }
  else {
    fill(cervena);
    ellipse(random(0,width), random(0,height), 100, 100);
  }
  //saveFrame("###.png");
}