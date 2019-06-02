import Section from './SectionIT'
import Article from './ArticleIT'

const title = 'Experience'
const description = 'As a former educator and currently a software developer, I try to bring the best of both fields in my professional practice.'
// Order from most recent to oldest
const articles = [
  new Article({
    contentType: 'group', 
    groups: [
      new Article({ 
        contentType: 'text', 
        title: 'Front-end Co-op Developer', 
        period: 'Jan 2019 - present', 
        institution: 'Grow Technologies', 
        description: 'I worked in an agile development to produce client-facing features and to fix production bugs. I used React and Redux daily and refactored an existing static workflow generator to be dynamic using RamdaJS.' 
      }),
      new Article({ 
        contentType: 'text', 
        title: 'Software Co-op Developer', 
        period: 'May 2018 - Dec 2018', 
        institution: 'Visier', 
        description: 'I worked in Visier\'s Analysis team as a backend co-op developer. I was responsible for creating an integration framework to minimize bugs and to improve developer efficiency.' 
      })
    ],
    heading: 'Software Development'
  }),
  new Article({
    contentType: 'group', 
    groups: [
      new Article({ 
        contentType: 'text', 
        title: 'BizHacks', 
        period: 'May 2018', 
        institution: 'University of British Columbia', 
        description: 'I worked on a BestBuy business product together with four other BCIT students. In 24 hours, we created a business proposal and an MVP to help in-store customers find products. We used Google Voice API to make the experience interactive and natural. We presented to a panel of judges and an audience of fifty.' 
      }),
    ],
    heading: 'Personal'
  }),
  new Article({
    contentType: 'group', 
    groups: [
      new Article({ 
        contentType: 'text', 
        title: 'Teacher', 
        period: 'Oct 2013 - Aug 2017', 
        institution: 'Collingwood Secondary School', 
        description: 'I helped develop the junior robotics curriculum and incorporated 3D printing into our education framework. I was head coach for the school\'s badminton team and lead them to their first play-off games in ten years. For three years, I mentored and coached students participating in Science and robotics competition, with the highlight being an honourable mention at the 2016 VEX World Championships.' 
      }),
    ],
    heading: 'Other'
  })
]


const Experience = new Section(title, description, articles, 'columnn')

export default Experience