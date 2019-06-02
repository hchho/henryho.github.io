import React from 'react'

const renderContent = content => {
  switch (content.contentType) {
    case 'image':
      return renderImageContent(content)
    case 'group':
      return renderGroup(content)
    case 'text':
      return renderText(content)
    default:
      return null
  }
}

const renderImageContent = content => (
  <img src={content.path} alt={content.alt} height='64px' />
)

const renderGroup = content => (
  <div className="article-group">
    <h3>{content.heading}</h3>
    {content.groups.map(group => renderContent(group.content))}
  </div>
)

const renderText = content => (
  <div>
    <h3>{content.heading}</h3>
    <h4>{content.title}, {content.period}</h4>
    <p>{content.description}</p>
  </div>
)

const Article = content => (
  <article>
    {renderContent(content)}
  </article>
)

export default Article