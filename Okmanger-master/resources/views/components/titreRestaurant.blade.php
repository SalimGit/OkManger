
<div>
  <article class="media">
    <figure class="media-left">
      <p class="image is-128x128">
        <img src="#">
      </p>
    </figure>
    <div class="media-content">
      <div class="content">
        <p>
          <strong class="title">Titre Restaurant</strong>
        </p>
        <p class="sousTitre">
          Description du restaurent
        </p>
      </div>
      <nav class="level is-mobile">
        <div class="level-left" id="etoile">
          <a class="level-item">
            <svg height="24" width="24" viewBox="0 0 24 24" class="ccl-0f24ac4b87ce1f67 ccl-ed34b65f78f16205">
              <path d="M12 1L9 9H2L7 14.0001L5 21L12 17.0001L19 21L17 14.0001L22 9H15L12 1Z"></path>
            </svg>
          </a>
          <a class="level-item">
            <svg height="24" width="24" viewBox="0 0 24 24" class="ccl-0f24ac4b87ce1f67 ccl-ed34b65f78f16205">
              <path d="M12 1L9 9H2L7 14.0001L5 21L12 17.0001L19 21L17 14.0001L22 9H15L12 1Z"></path>
            </svg>
          </a>
          <a class="level-item">
            <svg height="24" width="24" viewBox="0 0 24 24" class="ccl-0f24ac4b87ce1f67 ccl-ed34b65f78f16205">
              <path d="M12 1L9 9H2L7 14.0001L5 21L12 17.0001L19 21L17 14.0001L22 9H15L12 1Z"></path>
            </svg>
          </a>
          <a class="level-item">
            <svg height="24" width="24" viewBox="0 0 24 24" class="ccl-0f24ac4b87ce1f67 ccl-ed34b65f78f16205">
              <path d="M12 1L9 9H2L7 14.0001L5 21L12 17.0001L19 21L17 14.0001L22 9H15L12 1Z"></path>
            </svg>
          </a>
          <a class="level-item">
            <svg height="24" width="24" viewBox="0 0 24 24" class="ccl-0f24ac4b87ce1f67 ccl-ed34b65f78f16205">
              <path d="M12 1L9 9H2L7 14.0001L5 21L12 17.0001L19 21L17 14.0001L22 9H15L12 1Z"></path>
            </svg>
          </a>
        </div>
      </nav>
    </div>
  </article><center>
  <div class="confirmation">
      @if( session()->has('success'))
          <div class="notification is-primary">{{ session()->get('success') }}</div>
      @endif
  </div>
  </center>
</div>

