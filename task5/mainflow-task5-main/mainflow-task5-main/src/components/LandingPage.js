import React from 'react';
import './LandingPage.css'; // Import your CSS file
import profilePhoto from './profile.jpg'; // Add a profile photo to your project and import it here

const LandingPage = () => {
  return (
    <div className="landing-page">
      {/* Header Section */}
      <header className="header">
        <div className="logo">ShopEasy</div>
        <nav className="navigation">
          <a href="#home">Home</a>
          <a href="#features">Features</a>
          <a href="#about">About</a>
          <a href="#contact">Contact</a>
        </nav>
      </header>

      {/* Hero Section */}
      <main className="main-content">
        <section className="hero-section" id="home">
          <img src={profilePhoto} alt="Profile" className="profile-photo" />
          <h1>Welcome to ShopEasy</h1>
          <p>Your ultimate destination for effortless shopping.</p>
          <button className="cta-button">Start Shopping</button>
        </section>

        {/* Features Section */}
        <section className="features-section" id="features">
          <h2>Our Features</h2>
          <div className="features">
            <div className="feature">
              <h3>Wide Range of Products</h3>
              <p>Explore a diverse collection of products across multiple categories.</p>
            </div>
            <div className="feature">
              <h3>Exclusive Discounts</h3>
              <p>Enjoy amazing discounts and deals exclusively available on ShopEasy.</p>
            </div>
            <div className="feature">
              <h3>Fast Delivery</h3>
              <p>Get your orders delivered quickly and securely to your doorstep.</p>
            </div>
            <div className="feature">
              <h3>Easy Returns</h3>
              <p>Shop with confidence with our easy return policy.</p>
            </div>
            <div className="feature">
              <h3>24/7 Customer Support</h3>
              <p>Our support team is here to help you anytime, anywhere.</p>
            </div>
          </div>
        </section>

        {/* About Section */}
        <section className="about-section" id="about">
          <h2>About ShopEasy</h2>
          <p>
            At ShopEasy, we believe in providing the best online shopping experience. With a wide range of products, competitive prices, and unparalleled customer service, we strive to make online shopping easy and convenient for everyone.
          </p>
          <p>
            Our team is dedicated to sourcing quality products and ensuring that our customers have access to the latest trends and best deals. From electronics to fashion, home goods to beauty products, we have something for everyone.
          </p>
        </section>

        {/* Contact Section */}
        <section className="contact-section" id="contact">
          <h2>Contact Us</h2>
          <p>If you have any questions or need assistance, feel free to reach out to us:</p>
          <form className="contact-form">
            <input type="text" placeholder="Your Name" required />
            <input type="email" placeholder="Your Email" required />
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit" className="contact-button">Send Message</button>
          </form>
        </section>
      </main>

      {/* Footer Section */}
      <footer className="footer">
        <p>&copy; 2024 ShopEasy. All rights reserved.</p>
        <p>Follow us on:
          <a href="#">Facebook</a> |
          <a href="#">Instagram</a> |
          <a href="#">Twitter</a>
        </p>
      </footer>
    </div>
  );
};

export default LandingPage;
