import { UserProfile } from "@clerk/nextjs";
 
const UserProfilePage = () => (
  <UserProfile path="/user-profile" routing="path" />
);
 
export default UserProfilePage;

<script>
import Clerk from '@clerk/clerk-js';
 
// Initialize Clerk with your Clerk publishable key
const clerk = new Clerk('​pk_test_Z2xvd2luZy1mb3gtMzEuY2xlcmsuYWNjb3VudHMuZGV2JA​');
await clerk.load();
 
document.getElementById("app").innerHTML = `
  <div id="user-profile"></div>
`;
 
const userProfileDiv =
  document.getElementById("user-profile");
 
clerk.mountUserProfile(userProfileDiv);

import Clerk from '@clerk/clerk-js';
 
// Initialize Clerk with your Clerk publishable key
const clerk = new Clerk('​pk_test_Z2xvd2luZy1mb3gtMzEuY2xlcmsuYWNjb3VudHMuZGV2JA​');
await clerk.load();
 
document.getElementById('app').innerHTML = `
  <div id="user-profile"></div>
`
 
const userProfileDiv =
  document.getElementById('user-profile');
 
clerk.mountUserProfile(userProfileDiv);
 
// ...
 
clerk.unmountUserProfile(userProfileDiv);


</script>

<div id="user-profile"></div>
 
<!-- Initialize Clerk with your
Clerk Publishable key and Frontend API URL -->
<script
  async
  crossorigin="anonymous"
  data-clerk-publishable-key="​pk_test_Z2xvd2luZy1mb3gtMzEuY2xlcmsuYWNjb3VudHMuZGV2JA​"
  src="https://​glowing-fox-31.clerk.accounts.dev​/npm/@clerk/clerk-js@latest/dist/clerk.browser.js"
  type="text/javascript"
></script>
 
<script>
  window.addEventListener("load", async function () {
    await Clerk.load();
 
    const userProfileDiv =
      document.getElementById('user-profile');
 
    Clerk.openUserProfile(userProfileDiv);
  });
</script>

<div id="user-profile"></div>
 
<!-- Initialize Clerk with your
Clerk Publishable key and Frontend API URL -->
<script
  async
  crossorigin="anonymous"
  data-clerk-publishable-key="​pk_test_Z2xvd2luZy1mb3gtMzEuY2xlcmsuYWNjb3VudHMuZGV2JA​"
  src="https://​glowing-fox-31.clerk.accounts.dev​/npm/@clerk/clerk-js@latest/dist/clerk.browser.js"
  type="text/javascript"
></script>
 
<script>
  window.addEventListener("load", async function () {
    await Clerk.load();
 
    const userProfileDiv =
      document.getElementById('user-profile');
 
    Clerk.closeUserProfile(userProfileDiv);
  });
</script>