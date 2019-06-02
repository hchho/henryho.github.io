import Section from './SectionIT'

const title = 'About Me'
const description = 'Before programming, I dipped my feet in science, education, psychology research, and publishing. ' + 
'I learned how to work in small and large teams, to communicate with various stakeholders, and to think methodically. ' +
'Programming gives me endless challenges and I live for the thrill of solving complicated problems with simple solutions. ' + 
'Outside of work, I enjoy reading, cooking, and exercising. Apparently I also have a knack for carpentry after doing some home renovation projects!'

const articles = []

const AboutMe = new Section(title, description, articles)

export default AboutMe