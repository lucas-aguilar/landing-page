import app from 'flarum/app';
import { extend } from 'flarum/extend';
import LandingPageSettingsModal from './components/LandingPageSettingsModal';

app.initializers.add('kyrne/landing-page', () => {
  app.extensionSettings['kyrne-landing-page'] = () => app.modal.show(new LandingPageSettingsModal());
});