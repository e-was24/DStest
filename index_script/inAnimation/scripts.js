

const body = document.querySelectorAll("body");

gsap.from(".animation p", {
  x: -100,
  opacity: 0,
  duration: 1.5,
  ease: "expo",
  onComplete: function () {
    gsap.to(".animation h2", {
      opacity: 1,
      duration: 1,
      x: 0,
      stagger: 0.2,
      ease: "expo",
      onComplete: function () {
        gsap.to(".animation h2 span", {
          opacity: 1,
          delay: 0.1,
          onComplete: function () {
            gsap.to(".animation .small-text", {
              y: 0,
              opacity: 1,
              ease: "rough",
              onComplete: function () {
                gsap.to(".cover-main-content", {
                  y: 0,
                  delay: 0,
                  duration: 1,
                  opacity: 1,
                  ease: "slow",
                  opacity: 1,
                  onComplete: function () {
                    gsap.to(body, {
                      height: "100dvh",
                      overflowY: "hidden",
                    });
                  },
                });
              },
            });
          },
        });
      },
    });
  },
});


function openSection(sectionClass) {
  // Sembunyikan semua section
  const allSections = document.querySelectorAll('.content, .grafik, .Bar_coment');
  allSections.forEach(el => {
    el.classList.remove('show');
    el.classList.add('hidde');
  });

  // Tampilkan section yang sesuai tombol diklik
  const section = document.querySelector(sectionClass);
  if (section) {
    section.classList.remove('hidde');
    section.classList.add('show');
  }
}

// Fungsi untuk menutup semua section
function closeAll() {
  const allSections = document.querySelectorAll('.content, .grafik, .Bar_coment');
  allSections.forEach(el => {
    el.classList.remove('show');
    el.classList.add('hidde');
  });
}

// Contoh penggunaan untuk tombol:
function openShopPage() {
  openSection('.content');
}

function openGrafik() {
  openSection('.grafik');
}

function openComentForm() {
  openSection('.Bar_coment');
}
