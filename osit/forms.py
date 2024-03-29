from django.forms import ModelForm
from django import forms

from osit.models import Contact, Career


class ContactForm(ModelForm):
    class Meta:
        model = Contact
        fields = '__all__'
class CareerForm(ModelForm):
    class Meta:
        model = Career
        fields = ['name', 'email', 'message', 'cv']
    def clean_cv(self):
        cv = self.cleaned_data.get('cv')
        if cv:
            if cv.size > 5 * 1024 * 1024:  # 5MB
                raise forms.ValidationError("File size is too large. Max allowed size is 5MB.")
            if not cv.name.endswith('.pdf'):
                raise forms.ValidationError("Only PDF files are allowed.")
        return cv