Digital Questionnaire DApp developed as part of my thesis. 

Technologies used: 

  1. Solidity 0.4.0
  2. PHP
  3. JavaScript
  4. HTML/CSS
  5. Remix Ethereum
  6. Metamask
  7. Ganache
  8. SQL/MySQL
  9. Web3.js library
  10. Apache Tomcat
  11. SQLDeveloper

Used XAMPP as a local tomcat server and MySQL database in order to store the users and admins of the app. When the user enters the app and fills the questionnaire, the app generates a smart contract using solidity and deploys that contract to the ethereum network.
We can then extract all the info from the smart contract and provide a graph of the analytics from all users.

For deploying the smart contract we need a Metamask account to pay some fees for the deployment (with test ETH coins). Alternative we can use Ganache to create an account with test coins.
For interacting with Smart Contracts, Remix IDE was used.


![database](https://github.com/savvaserm/Digital-Questionnaire-Dapp/assets/39909089/aa4b37fc-58a3-4280-98c0-e8f328bf5063)

Login/Register Page:
![loginpage](https://github.com/savvaserm/Digital-Questionnaire-Dapp/assets/39909089/b4d3cc49-962f-43b3-9726-c6fbcaa5f34c)

Admin can create questions to be filled by users and publish as questionaire:
![questionspage](https://github.com/savvaserm/Digital-Questionnaire-Dapp/assets/39909089/e9e9b2bf-f92f-4521-92e5-5d66b0adcb33)

Users can enter the page and see the questionaire:
![questionairepage](https://github.com/savvaserm/Digital-Questionnaire-Dapp/assets/39909089/35bd3847-7ebd-4c35-ad78-3bb23b08ae72)

Users with admin role can create different test for different courses and create questions based on that:
![testspage](https://github.com/savvaserm/Digital-Questionnaire-Dapp/assets/39909089/c2aa28f6-1a5e-4ec5-b714-51ee71a20584)

When the questionaire is finished, a smart contract is generated and ready to be deplyoed to the Ethereum mainnet:
![remixcontract](https://github.com/savvaserm/Digital-Questionnaire-Dapp/assets/39909089/884b2862-0995-46e4-98e7-5369d6f489cf)


