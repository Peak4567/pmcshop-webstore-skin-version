 // Mouse interaction with grid
        let mouseX = 0, mouseY = 0;
        
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            
            createGridEffect(mouseX, mouseY);
            if (Math.random() > 0.8) {
                createInteractiveGridLine(mouseX, mouseY);
            }
        });
        
        function createGridEffect(x, y) {
            const effect = document.createElement('div');
            effect.className = 'mouse-grid-effect';
            
            // Snap to grid
            const gridSize = 60;
            const snappedX = Math.round(x / gridSize) * gridSize;
            const snappedY = Math.round(y / gridSize) * gridSize;
            
            effect.style.left = (snappedX - 2) + 'px';
            effect.style.top = (snappedY - 2) + 'px';
            effect.style.width = '4px';
            effect.style.height = '4px';
            
            document.body.appendChild(effect);
            
            setTimeout(() => {
                effect.remove();
            }, 1000);
        }
        
        function createInteractiveGridLine(x, y) {
            const line = document.createElement('div');
            line.className = 'interactive-grid-line';
            
            // Random direction (horizontal or vertical)
            const isHorizontal = Math.random() > 0.5;
            
            if (isHorizontal) {
                line.style.left = (x - 75) + 'px';
                line.style.top = y + 'px';
                line.style.height = '2px';
            } else {
                line.style.left = x + 'px';
                line.style.top = (y - 75) + 'px';
                line.style.width = '2px';
                line.style.height = '150px';
                line.style.background = 'linear-gradient(to bottom, transparent, rgba(120, 120, 120, 0.7), transparent)';
            }
            
            document.body.appendChild(line);
            
            setTimeout(() => {
                line.remove();
            }, 1200);
        }
        
        // Create floating grid dots
        function createFloatingDots() {
            const container = document.getElementById('grid-dots-container');
            const dotCount = 20;
            
            for (let i = 0; i < dotCount; i++) {
                const dot = document.createElement('div');
                dot.className = 'floating-grid-dots';
                
                // Position on grid intersections
                const gridSize = 60;
                const col = Math.floor(Math.random() * (window.innerWidth / gridSize));
                const row = Math.floor(Math.random() * (window.innerHeight / gridSize));
                
                dot.style.left = (col * gridSize) + 'px';
                dot.style.top = (row * gridSize) + 'px';
                dot.style.animationDelay = Math.random() * 8 + 's';
                dot.style.animationDuration = (Math.random() * 4 + 6) + 's';
                
                container.appendChild(dot);
            }
        }
        
        // Add click ripple effect on grid
        document.addEventListener('click', (e) => {
            const ripple = document.createElement('div');
            const gridSize = 60;
            const snappedX = Math.round(e.clientX / gridSize) * gridSize;
            const snappedY = Math.round(e.clientY / gridSize) * gridSize;
            
            ripple.style.position = 'absolute';
            ripple.style.left = (snappedX - 30) + 'px';
            ripple.style.top = (snappedY - 30) + 'px';
            ripple.style.width = '60px';
            ripple.style.height = '60px';
            ripple.style.border = '2px solid rgba(120, 120, 120, 0.6)';
            ripple.style.borderRadius = '8px';
            ripple.style.pointerEvents = 'none';
            ripple.style.animation = 'gridRipple 0.8s ease-out forwards';
            ripple.style.zIndex = '1000';
            
            document.body.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 800);
        });
        
        // Add grid ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes gridRipple {
                from {
                    transform: scale(1) rotate(0deg);
                    opacity: 0.8;
                }
                to {
                    transform: scale(2) rotate(45deg);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
        
        // Add enhanced hover effects to block elements
        document.querySelectorAll('.block-1').forEach((block, index) => {
            block.addEventListener('mouseenter', () => {
                block.style.transform = 'scale(1.05) translateY(-2px)';
                block.style.filter = 'brightness(1.1)';
            });
            
            block.addEventListener('mouseleave', () => {
                block.style.transform = 'scale(1) translateY(0)';
                block.style.filter = 'brightness(1)';
            });
        });
        
        // Add card highlight animation
        const cardHighlightStyle = document.createElement('style');
        cardHighlightStyle.textContent = `
            @keyframes cardHighlight {
                0% {
                    opacity: 1;
                    transform: scale(1);
                }
                100% {
                    opacity: 0;
                    transform: scale(1.1);
                }
            }
        `;
        document.head.appendChild(cardHighlightStyle);
        
        // Initialize
        createFloatingDots();
        
        // Recreate dots periodically
        setInterval(() => {
            const container = document.getElementById('grid-dots-container');
            container.innerHTML = '';
            createFloatingDots();
        }, 30000);