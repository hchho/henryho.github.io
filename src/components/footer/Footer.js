import React from 'react'
import './Footer.scss'
import ImgLink from './ImgLink'

const Footer = ({ contacts = []}) => (
  <footer>
    <div id="link-dock">
      {contacts.map(contact => <ImgLink {...contact} />)}
    </div>
    <div id="created-by">
      Created by Henry Ho
    </div>
  </footer>
)

export default Footer