import React from 'react'
import Article from '../Article'
import './Section.scss'

const Section = ({ title, description, articles = [], orientation = 'row' }) => (
  <section>
    <h2>{title}</h2>
    <p>
      {description}
    </p>
    <div className={`article-${orientation}-container`}>
    {articles.length > 0 ? articles.map(article => <Article {...article.content} />) : null}
    </div>
  </section>
)

export default Section