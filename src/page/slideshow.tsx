import React, { useState, useEffect } from 'react';

function SlideShow () {
  const [currentSlide, setCurrentSlide] = useState(0);

  const slides = [
    'image/banner1.jpg',
    'image/banner2.jpg',
    'image/banner3.jpg',
    'image/banner4.jpg',
    'image/banner5.jpg',
    'image/banner6.jpg',
    'image/banner7.jpg',
  ];

  useEffect(() => {
    const interval = setInterval(() => {
      setCurrentSlide((currentSlide + 1) % slides.length);
    }, 5000);

    return () => clearInterval(interval);
  }, [currentSlide, slides.length]);

  return (
    <section style={{ marginTop: '160px' }}>
      <div className="row background">
        <div className="col-8 col-s-8 col-m-12 background-1">
          <div className="myslide">
            {slides.map((slide, index) => (
              <img
                key={index}
                className={`myslide1 ${index === currentSlide ? 'active' : ''}`}
                src={slide}
                alt={`Slide ${index}`}
                width="100%"
                height="100%"
              />
            ))}
          </div>
          <div className="Nodeslide">
            <ul>
              {slides.map((_, index) => (
                <li
                  key={index}
                  className={index === currentSlide ? 'active_nut' : ''}
                >
                  &nbsp;
                </li>
              ))}
            </ul>
          </div>
        </div>
        <div className="col-4 col-s-4 col-m-6 background-21">
          <img src="image/banner1.jpg" alt="Right Banner 1" width="100%" height="100%" />
        </div>
        <div className="col-4 col-s-4 col-m-6 background-22">
          <img src="image/banner2.jpg" alt="Right Banner 2" width="100%" height="100%" />
        </div>
      </div>
    </section>
  );
};

export default SlideShow;