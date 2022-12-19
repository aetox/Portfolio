/* BACKGROUND */

var gradient = new Gradient();
gradient.initGradient("#canvas");

/* *********************************************************** */

/* SKILLS */

const scrollOffset = 100;

function addSrolled (x){

    const elementInView = (el, offset = 0) => {
        const elementTop = el.getBoundingClientRect().top;
       
        return (
          elementTop <= 
          ((window.innerHeight || document.documentElement.clientHeight) - offset)
        );
      };
       
      const displayScrollElement = () => {
        x.classList.add('scrolled');
      }
       
      const hideScrollElement = () => {
        x.classList.remove('scrolled');
      }
       
      const handleScrollAnimation = () => {
        if (elementInView(x, scrollOffset)) {
            displayScrollElement();
        } else {
          hideScrollElement();
        }
      }
       
      window.addEventListener('scroll', () => {
        handleScrollAnimation();
      })
    
}




const scrollSkill1= document.querySelector(".skill-scrol1");
const scrollSkill2= document.querySelector(".skill-scrol2");
const scrollSkill3= document.querySelector(".skill-scrol3");
const scrollSkill4= document.querySelector(".skill-scrol4");
const scrollSkill5= document.querySelector(".skill-scrol5");
const scrollHeader = document.querySelector('.en-tete');

addSrolled(scrollSkill1);
addSrolled(scrollSkill2);
addSrolled(scrollSkill3);
addSrolled(scrollSkill4);
addSrolled(scrollSkill5);


window.onload = function() {
  scrollHeader.classList.remove('load');
  scrollHeader.classList.add('loaded');
  
};

const scrollSkillInt1= document.querySelector(".skill-Int1");
const scrollSkillInt2= document.querySelector(".skill-Int2");
const scrollSkillInt3= document.querySelector(".skill-Int3");
const scrollSkillInt4= document.querySelector(".skill-Int4");
const scrollSkillInt5= document.querySelector(".skill-Int5");



addSrolled(scrollSkillInt1);
addSrolled(scrollSkillInt2);
addSrolled(scrollSkillInt3);
addSrolled(scrollSkillInt4);
addSrolled(scrollSkillInt5);




/* *********************************************************** */

function setupTypewriter(t) {
  var HTML = t.innerHTML;

  t.innerHTML = "";

  var cursorPosition = 0,
      tag = "",
      writingTag = false,
      tagOpen = false,
      typeSpeed = 100,
    tempTypeSpeed = 0;

  var type = function() {
    
      if (writingTag === true) {
          tag += HTML[cursorPosition];
      }

      if (HTML[cursorPosition] === "<") {
          tempTypeSpeed = 0;
          if (tagOpen) {
              tagOpen = false;
              writingTag = true;
          } else {
              tag = "";
              tagOpen = true;
              writingTag = true;
              tag += HTML[cursorPosition];
          }
      }
      if (!writingTag && tagOpen) {
          tag.innerHTML += HTML[cursorPosition];
      }
      if (!writingTag && !tagOpen) {
          if (HTML[cursorPosition] === " ") {
              tempTypeSpeed = 0;
          }
          else {
              tempTypeSpeed = (Math.random() * typeSpeed) + 50;
          }
          t.innerHTML += HTML[cursorPosition];
      }
      if (writingTag === true && HTML[cursorPosition] === ">") {
          tempTypeSpeed = (Math.random() * typeSpeed) + 50;
          writingTag = false;
          if (tagOpen) {
              var newSpan = document.createElement("span");
              t.appendChild(newSpan);
              newSpan.innerHTML = tag;
              tag = newSpan.firstChild;
          }
      }

      cursorPosition += 1;
      if (cursorPosition < HTML.length - 1) {
          setTimeout(type, tempTypeSpeed);
      }

  };

  return {
      type: type
  };
}

var typer = document.getElementById('typewriter');

typewriter = setupTypewriter(typewriter);

typewriter.type();