import React from 'react';
import './App.css';
import './base.css';
import Notification from './components/Notification';
import Button from './components/Button';

function App() {
  return (
    <div className="App u-container">
      <Notification 
        state="is-error"
        header="Incorrect email address." 
        primaryContent={(<p>The email you entered does not belong to any InterNations account. Please try again.</p>)}
        secondaryContent={(<p>If you forgot the email address with which you registered, please <a href="/request support">request support</a>.</p>)}
      />
      <Notification 
        state="is-success"
        header="Thank you!" 
        primaryContent={(<p>You have successfully sent the invitation at <a href="/my@email.com">my@email.com</a>.</p>)}
        secondaryContent={(<p>All you have to do now is accept the invitation and start connecting with members of our community.</p>)}
      />
      <Button />
    </div>
  );
}

export default App;
