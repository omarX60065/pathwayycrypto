
// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCQBByTRrTzQ1RCryWGAX9V0cxuO3ak6Ow",
  authDomain: "user-auth-f74f2.firebaseapp.com",
  projectId: "user-auth-f74f2",
  storageBucket: "user-auth-f74f2.firebasestorage.app",
  messagingSenderId: "45237307894",
  appId: "1:45237307894:web:eaa3076015ac805c975fd7",
  measurementId: "G-GNG92V3LNG"
};


// Sign Up
document.getElementById('signup-form').addEventListener('submit', async (e) => {
  e.preventDefault();
  const email = document.getElementById('signup-email').value;
  const password = document.getElementById('signup-password').value;

  try {
    await createUserWithEmailAndPassword(auth, email, password);
    alert('Sign up successful! Redirecting...');
    window.location.href = '?a=account'; // Redirect to dashboard or desired page
  } catch (error) {
    alert('Sign up error: ' + error.message);
  }
});

// Login
document.getElementById('login-form').addEventListener('submit', async (e) => {
  e.preventDefault();
  const email = document.getElementById('login-email').value;
  const password = document.getElementById('login-password').value;

  try {
    await signInWithEmailAndPassword(auth, email, password);
    alert('Login successful! Redirecting...');
    window.location.href = 'dashboard.html'; // Redirect to dashboard or desired page
  } catch (error) {
    alert('Login error: ' + error.message);
  }
});

// Logout
document.getElementById('logout-button').addEventListener('click', async () => {
  try {
    await signOut(auth);
    alert('Logged out.');
    window.location.href = 'index.html'; // Redirect to homepage or login page
  } catch (error) {
    alert('Logout error: ' + error.message);
  }
});

// Check if user is logged in (for conditional rendering)
onAuthStateChanged(auth, (user) => {
  if (user) {
    console.log('User is logged in:', user.email);
    document.getElementById('logout-button').style.display = 'block';
  } else {
    document.getElementById('logout-button').style.display = 'none';
  }
});