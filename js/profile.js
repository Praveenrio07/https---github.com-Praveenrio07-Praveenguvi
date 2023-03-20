// Initialize Firebase
const firebaseConfig = {
    apiKey: "YOUR_API_KEY",
    authDomain: "YOUR_AUTH_DOMAIN",
    projectId: "YOUR_PROJECT_ID",
    storageBucket: "YOUR_STORAGE_BUCKET",
    messagingSenderId: "YOUR_SENDER_ID",
    appId: "YOUR_APP_ID"
};
firebase.initializeApp(firebaseConfig);

// Display user profile
function displayUserProfile(userId) {
    firebase.firestore().collection("userProfiles").doc(userId).get()
        .then((doc) => {
            if (doc.exists) {
                const profile = doc.data();
                console.log("Username:", profile.username);
                console.log("Phone:", profile.phone);
            } else {
                console.log("User profile not found");
            }
        })
        .catch((error) => {
            console.log("Error retrieving user profile:", error.message);
        });
}
