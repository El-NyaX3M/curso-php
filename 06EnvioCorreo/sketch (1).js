function setup() {
  createCanvas(960, 260);
}
function draw() {

  const a = 120;
  const b = 230;
  let x = 15;
  let y = 15;

  strokeWeight(4);
  for(let i = 0; i < 7; i++){
    
    stroke("rgb(0,0,0)");
    fill("rgb(243,240,240)");
    rect(x,y,a,b,20);
    line(x, (y + b/2), (x + a), (y + b/2));
    fill("rgb(67,58,4)");
    circle((x + a/2), (y + b/2), 20);
    stroke("rgb(0,0,0)");
    fill("rgb(0,0,0)");

    switch(i){
      case 1:    

        circle((x + a/2), (y + b/4),45);
        circle((x + a/2), (y + 3*b/4),45);

        break;
      case 2:
        for(let j = 0; j < 14; j++){
            if(j == 0 || j == 4 || j == 9 || j == 13){
              if(j < 7) circle((x + a/4), (y + (j+1)*b/8), 20);
              else circle((x + 3*a/4), (y + (j-6)*b/8), 20);
            }
        }
        break;
      case 3:
        for(let j = 0; j < 21; j++){
            if(!(j % 4)){
              if(j < 7){circle((x + a/4), (y + (j+1)*b/8), 20);}
              else if(j < 14){circle((x + 2*a/4), (y + (j-6)*b/8), 20);}
              else{circle((x + 3*a/4), (y + (j-13)*b/8), 20);}
            }
        }
        break;
      case 4:
        for(let j = 0; j < 15; j++){
            if(!(j % 2)){
              if(j < 8){circle((x + a/4), (y + (j+1)*b/8), 20);}
              else{circle((x + 3*a/4), (y + (j-7)*b/8), 20);}
            }
        }
        break;
      case 5:
        for(let j = 0; j < 21; j++){
            if(!(j % 2) && j != 10){
              if(j < 7){ circle((x + a/4), (y + (j+1)*b/8), 20);}
              else if(j < 14){circle((x + 2*a/4), (y + (j-6)*b/8), 20);}
              else{circle((x + 3*a/4), (y + (j-13)*b/8), 20);}
            }
        }
        break;
      case 6:
        for(let j = 0; j < 14; j++){
            if(j != 3 && j != 10){
              if(j < 7){circle((x + a/4), (y + (j+1)*b/8), 20);}
              else{circle((x + 3*a/4), (y + (j-6)*b/8), 20);}
            }
        }
        break;
    }
    x += a + 15;
  }
}