import React from 'react'

const ImgLink = ({ srcPath, path, alt }) => (
  <a href={path} target="_blank" rel="noopener noreferrer">
    <img src={srcPath} alt={alt} className="overlay svg-link"/>
  </a>
)

export default ImgLink