import React from 'react';
import PropTypes from 'prop-types';
import './Notification.css';

function Notification(props) {
    return (
      <div className={`Notification ${props.state}`}>
        <strong className="Notification-header">
            {props.header}
        </strong>
        <div>
            {props.primaryContent}
            {props.secondaryContent}
        </div>
      </div>
    );
  }
  
  Notification.propTypes = {
    state: PropTypes.oneOf(['is-success', 'is-error']),
    header: PropTypes.string,
    primaryContent: PropTypes.object,
    secondaryContent: PropTypes.object
  }

  export default Notification;
  