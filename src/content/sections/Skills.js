import Section from './SectionIT'
import Article from './ArticleIT'

const title = 'Skills'
const description = 'Strong JavaScript developer with experience in Scala, Java, and Ruby-on-Rails.'
const articles = [
  new Article({ contentType: 'image', path: 'assets/icons/logo_javascript.png', alt: 'javascript' }),
  new Article({ contentType: 'image', path: 'assets/icons/logo_java.png', alt: 'java' }),
  new Article({ contentType: 'image', path: 'assets/icons/logo_scala.png', alt: 'scala' }),
]

const Skills = new Section(title, description, articles, 'row')

export default Skills