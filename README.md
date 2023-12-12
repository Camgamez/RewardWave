# RewardWave
This is a corporate gift web application. 

## Overview of “The Task”
The objective of the task is to create and develop a storage and distribution management system for corporate gift items. The system is used to track items and their count in storage, create gift campaigns with customisable gift box contents from gift items held in storage.

### Data
To implement the system you need to implement a database structure that has to contain the following data (you are free to add as much additional data as you like or edit provided data attribute fields as you find necessary to support your system’s logic):

#### users
- id
- name // use a person’s full name
- e-mail
- address
#### gift_items
- id // does not need to printed in front-end
- name
- unit_price
- units_owned
#### gift_campaigns
- id
- gift_item // needs to contain according info for each item in a single gift-box
- gift_item_count // needs to contain according info for each item in a single gift-box
- status // status values: preparing / ready / dispatched
- dispatch_date
- delivery_date // approximate date when all gifts will have been delivered
### Important note:
To fully implement the relational data structure you will need to use foreign keys, intermediary data tables and etc. Give it a good thought.

### Authorization & Authentication
The system needs to have a registration / login functionality and there should be at least 2 different user roles, one of them being Human Resources (HR).

### Basic user role:
- view campaigns the user has taken part in addition to all currently active campaigns.
- subscribe/unsubscribe to any currently active campaign.
- any inactive campaign the user has not taken part in is hidden from the user.
- list of items within each gift-box should be viewable, but only if the present date is later than the date of approximate all boxes’ delivery date. So that the box contents do not get spoiled.
- once the gift items become viewable - users should be able to rate the gift-box as a whole (i.e. in a scale from 0 to 10, using 0-5 stars, etc.) and to add more feedback via comments.
### HR role permissions & features:
- In addition to all of the basic user features: ability to create, read, update and delete gift items.
  - While creating/updating it should be possible to edit all the content fields.
  - if editing is done to an existing item, the quantity entered should be added up to the currently owned amount.
- ability to create, read, update and delete gift campaigns.
- this role can view all past and present campaigns and their contents at any time.
- this role can view the average rating of each campaign once the present date becomes later than the campaign’s approximate delivery date.
- ability to export a list of the gift campaign’s users as in the format of a PDF file (with full names, phone numbers, addresses of recipients). So, the courier will see to whom gifts have to be delivered.
- ability to review all feedback comments about each campaign.
## Content
### Gift items
Each gift item consists of:

- item name
- unit price
- quantity owned // visible only to HR or admin roles.
### Gift campaigns
Each gift item consists of:

- campaign name
- list of items and their count in a single gift-box
- handover to courier date (dispatch date)
- list of subscribed users to whom it should be delivered
- status (not ready, ready, dispatched, completed)
- date when approximately all gifts will be delivered
### Requirements
1. Use SOLID principles
2. Create a simple and usable GUI
3. Use a Relational Database Management System (preferably MySQL) for data storage
4. Use version control (e.g. GitHub)
5. Validate form input
## Recommended development stack
- Laravel
- Vue.js
- Vuetify
- MySQL
## Bonus ideas + + +
1. Deploy the project to an online server
2. Add campaigns search, filters, add ability for HR to see how much was spent on every item in every campaign
3. Gift-box generator. Tool to randomly generate a gift-box from available gifts supplies based on provided criteria (max item number, max total price, etc.)
4. Apply technologies / features from the stack of provided technologies to use and feel free to show your skills while improving the system with your ideas
## Process
Process should look like this:

1. You start with reading all the guidelines
2. You start develop task
3. You ask questions @devs-mentors
4. You finish the task and let us know by tagging @devs-mentors. You add GitHub link to the message.
5. We review your code and write down comments what should be fixed.
6. Inviting you to interview to developer position or if your skills are still too weak, we will give other task and You will start from the beginning!
